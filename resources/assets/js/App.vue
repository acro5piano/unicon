<template>
    <div id="app">
        <navbar></navbar>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Admin Panel
                    <small>Everything is here.</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <!-- route outlet -->
                <router-view></router-view>
            </section>
            <!-- /.content -->
        </div>
        <footer></footer>
    </div>
</template>


<script>
    import Navbar from './components/layouts/Navbar.vue'
    import Footer from './components/layouts/Footer.vue'
    export default {
        components: {
            Navbar,
            Footer
        },
        replace: false
    }
</script>
