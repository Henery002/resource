<template>
<div>
    <div class="page-header">
        <h1 v-html="title"></h1>
    </div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <item v-for="list in lists" :data="list"></item>
    </div>
</div>
</template>
    
<script>
    import Item from './Item'
    export default {
        name: "index",
        data() {
            return {
                title: "我的Web服务器 <small> 选择需要进行的操作 </small>",
                lists: []
            }
        },
        components: {
            Item
        },

        created() {
            this.$http.get(this.GLOBAL.ServerHost, {
                params: {
                    action: "index",
                }
            }).then(function(response) {
                if (response.body.errCode === 0) {
                    this.lists = response.body.data;
                }
            }, function(response) {
                console.info(response);
            });
        }
    }
</script>