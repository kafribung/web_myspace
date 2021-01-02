<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 mb-10 px-10">
                <div class="grid justify-items-center dark:text-gray-100">
                    <div class="text-xl underline text-blue-400 mb-5">About Me</div>
                    <div class="flex justify-center mx-auto md:mx-80" >
                        <div v-if="about" v-html="about.description" class="mt-2  leading-loose font-light font-serif tracking-widest"></div>
                        <div v-else class="mt-2  leading-relaxed font-light font-serif tracking-widest">~ ~ ~</div>
                    </div>
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
            about : ''
        }
    },
    mounted() {
        this.getData()
    },
    methods: {
        getData(){
            this.axios
            .get('/api/about')
            .then((response) => {this.about = response.data.data})
            .catch(error => console.log(error))
        }
    },
    components: {
        Navbar,
        Footer
    }
}
</script>