<template>
<div v-show="show">
    <div class="page-header">
        <h1>{{title}}</h1>
    </div>
    <div class="row" v-html="html"></div>
</div>  
</template>

<script type="text/javascript">
    export default {
        name: "Info",
        data() {
            return {
                show: false,
                title: "PHP Info 的信息",
                html: "",
            };
        },

        created() {
            this.$http.get(this.GLOBAL.ServerHost, {
                params: {
                    action: "info"
                }
            }).then(
            function(response){
                this.show = true;
                this.html = response.body;
            }, function(response) {
                console.info(response)
            });
        }
    }
</script>