<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1> {{ article.title }} </h1>
            {{ article.content }}
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
                article: []
            }
        },
        methods: {
            fetchArticles() {
                this.$http({
                    url: '/api/articles/1',
                    method: 'GET'
                }).then(res =>  {
                    this.article =  res.data
                })
            }
        }
    }
</script>

