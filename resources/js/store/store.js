import { createStore, createLogger } from 'vuex'
import subject from './subject'
// import mutation_types from './mutation_types'

const debug = process.env.NODE_ENV !== 'production'

export default createStore({
  modules: {
    subject,
    // mutation_types
  },
  strict: debug,
  plugins: debug ? [createLogger()] : []
})