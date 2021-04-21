<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 px-10 h-screen">
            <div class="flex flex-col w-full dark:text-gray-100">
                <div class="flex justify-center text-xl underline text-blue-400">My Contact</div>
                <div class="flex justify-center">
                    <div class="mt-3 mb-10 p-5">
                        <a :href="'mailto:kafribung07@gmail.com'" target="_blank" class="font-light block text-lg hover:underline hover:font-italic">kafribung07@gmail.com</a>
                        <a :href="'mailto:60900117001@uin-alauddin.ac.id'" target="_blank" class="font-light text-lg hover:underline hover:font-italic">60900117001@uin-alauddin.ac.id</a>
                        <div class="subpixel-antialiased">Mamuju Sulawesi Barat, Kaluku 91561 Indonesia</div>
                    </div>
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
    components: {
        Navbar,
        Footer
    }
};
</script>

