<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">

                            <div class="">
                                <label for="email" class="col-md-4 control-label">
                                    E-Mail Address
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control"
                                           v-model="email" required autofocus>
                                </div>
                            </div>

                            <div class="">
                                <label for="password" class="col-md-4 control-label">
                                    Password
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control"
                                           v-model="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="checkbox" v-model="remember_me">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" v-on:click="login">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
        },
        data() {
            return {
                email: '',
                password: '',
                remember_me: false,
            }
        },
        methods: {
            login(e) {
                e.preventDefault()

                this.$http.post('/api/login', {
                    email: this.email,
                    password: this.password,
                }).then(res =>  {
                    this.$router.push('/home')
                })
            },
        }
    }
</script>
