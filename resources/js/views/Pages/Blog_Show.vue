<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 mb-10 px-10">
            <div class="flex flex-col mx-auto items-center  px-10 bg-white rounded-lg py-10 max-w-7xl dark:bg-gray-700  dark:text-gray-100">
                <div class="text-2xl font-extrabold underline text-blue-400">{{ blog.title }}</div>
                <div class="text-sm mt-3  font-bold italic text-dark">[{{ blog.user }} => {{ blog.created_at }}, views => {{ blog.view }}]</div>
                <div class="flex justify-center mx-auto md:mx-64">
                    <div class="mt-10 leading-loose tracking-widest  font-light" v-html="blog.description_2"></div>
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
            blog : {},
            view : '',
        }
    },
    mounted() {
        this.getData(),
        this.getView(),
        this.addView()
    },
    created() {
    },
    methods: {
        getData(){
            this.axios
            .get(`/api/blog/${this.$route.params.slug}`)
            .then((response) => {
                this.blog = response.data.data
            })
            .catch(error => {
                this.$router.push({name: 'Error'});
            })
        },
        getView(){
            this.axios
            .get(`/api/view/${this.$route.params.slug}`)
            .then(response => {
                this.view = response.data.data.view
            })
        },
        addView(){
            setTimeout(() => {
                var incView = this.view;
                var viewOri = {
                    "view" : (parseInt(this.view) + 1)
                };
                this.axios
                .post(`/api/view/${this.$route.params.slug}`, viewOri)
                .catch(error => console.log(error.data))
            }, 1000);
            
        }
    },
    components: {
        Navbar,
        Footer
    }
};
</script>