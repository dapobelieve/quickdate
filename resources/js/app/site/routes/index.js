import {
    Index,
    Home,
    Chaty,
    Profile
}
from '../components'

export default [
    {
        path: '/home',
        component: Index,
        children: [
            {
                path: '',
                name: 'user-home',
                component: Home
            },
            {
                path: '/profile',
                name: 'user-profile',
                component: Profile 
            },
            {
                path: '/chat',
                name: 'chatty',
                component: Chaty 
            }
        ],
    },
    
]