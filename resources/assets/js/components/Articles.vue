<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" v-for="article in articles">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ article.title }}
                    </div>
                    <div class="panel-body">
                        {{ article.content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            this.fetchArticles()
        },
        data() {
            return {
                articles: []
            }
        },
        methods: {
            fetchArticles() {
                this.$http({
                    url: '/api/articles',
                    method: 'GET'
                }).then(res =>  {
                    this.articles =  res.data
                })
            }
        }
    }
</script>
