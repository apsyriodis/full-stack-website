import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Illustrations from './components/Illustrations';
import Loaders from './components/Loaders';
import Mascot from './components/Mascot';
import Typography from './components/Typography';
import Wallpapers from './components/Wallpapers';


export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '/',
            component: Logo
        },

        {
            path: '/logosymbol',
            component: LogoSymbol
        },

        {
            path: '/colors',
            component: Colors
        },
        
        {
            path: '/illustrations',
            component: Illustrations
        },

        {
            path: '/loaders',
            component: Loaders
        },

        {
            path: '/Mascot',
            component: Mascot
        },

        {
            path: '/typography',
            component: Typography
        },

        {
            path: '/wallpapers',
            component: Wallpapers
        },

    ]
};
