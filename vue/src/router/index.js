import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/components/Index'

const Info = (resolve) => {
    import('@/components/Info').then(function(module){
        resolve(module)
    });
}


Vue.use(Router)

export default new Router({
  routes: [
    {
        path: '/',
        name: 'Index',
        component: Index
    },
    {
        path: "/info",
        name: "Info",
        component: Info,
    }
  ]
})
