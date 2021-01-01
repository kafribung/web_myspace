<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 px-10">
            <div class="flex flex-col items-center">
                <div class="text-xl  underline text-blue-400 mb-5">My Blog</div>
                <template v-if="blogs">
                    <div  class="flex justify-center w-11/12" v-for="blog in blogs.data" :key="blog.id">
                    <router-link :to="'/blog/show/' + blog.slug" class="bg-white  mb-10 p-5 rounded-lg shadow hover:shadow-lg transform transition-all hover:-translate-y-1 duration-200">
                        <div class="font-semibold font-sans text-xl hover:underline">{{ blog.title }}</div>
                        <div class="font-serif leading-loose my-5 font-light" v-html="blog.description"></div>
                        <span class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full" src="img_users/kafri.png" alt="Kafri" title="Kafris">
                                <div class="text-sm text-gray-600 ml-2">{{ blog.user }} | </div>
                                <div class="text-sm italic text-gray-600 ml-2">{{ blog.created_at }}</div>
                            </div>
                        </span>
                    </router-link>
                    </div>
                    <pagination :data="blogs" @pagination-change-page="getData"></pagination>
                </template>
                <template v-else>
                    <div class="text-sm text-blue-300 my-2">Data blog belum ada</div>
                </template>
            </div>
        </main>
        <!-- End Hero -->
        <Footer />
    </div>
</template>

<script>
import Navbar from "../../components/Navbar";
import Footer from '../../components/Footer'
export default {
    data() {
        return {
            blogs : {},
        }
    },
    mounted() {
        this.getData()
    },
    
    methods: {
        getData(page = 1){
            this.axios
            .get('/api/blog?page=' + page)
            .then((response) => {
                this.blogs = response.data
            })
            .catch(error => console.log(error))
        }
    },
    components: {
        Navbar,
        Footer
    }
};
</script>