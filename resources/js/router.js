import {createRouter, createWebHistory,} from 'vue-router'
import Show from './components/Show.vue'
import Index from './components/Index.vue'
const routes= [
    {
        name: 'index',
        path: '',
        component: Index,
    },
    {
        name: 'show',
        path: '/company/:id',
        component: Show,
    }
]
 const router = createRouter({
    history: createWebHistory(),
     routes,

})

export default router

