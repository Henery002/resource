// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from './router'
import VueResource from 'vue-resource'
import Global from './Global.vue'

Vue.prototype.GLOBAL = Global
Vue.use(VueResource);
Vue.config.productionTip = false

/* eslint-disable no-new */
var app = new Vue({
    el: '#main-content',
    router,
    data: function () {
        var self = this;
        return {
            phpVersion: "PHP",
            path: "/",
            strAceUrl: self.GLOBAL.ResourceUrl + "/ace",
            open: false,
        }
    },
    created() {
        this.$http.get(this.GLOBAL.ServerHost, {
            params: {
                action: "get-php-version"
            }
        }).then(function (response) {
            if (response.body.errCode === 0) {
                this.phpVersion = response.body.data;
            }
        }, function (response) {
            console.info(response);
        });
    }
});

router.beforeEach(function(to, from, next) {
    app.path = to.path;
    app.open = false;
    next();
})
