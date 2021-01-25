import Vue from 'vue'
import Vuex from 'vuex'

import notifications from './models/notifications'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        notifications,
    }
})

