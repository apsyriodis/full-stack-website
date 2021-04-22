import NotFound from './components/NotFound';
import Home from './components/Home';
import ContactList from './components/ContactList';
import AddContact from './components/AddContact';
import EditContact from './components/EditContact';

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [       
        {
            name: '*',
            path: '*',
            component: NotFound
        },
        
        {
            name: '/',
            path: '/',
            component: Home
        },

        {
            name: '/contact_list',
            path: '/contact_list',
            component: ContactList
        },

        {
            name: '/add_contact',
            path: '/add_contact',
            component: AddContact
        },

        {
            name: 'edit_contact',
            path: '/edit_contact/:id?',
            component: EditContact
        },
    ]
};
