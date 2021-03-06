export const productGetters = {
    allProducts: (state) => {
        return state.products
    },
    productById: (state, getters) => id => {
        if (getters.allProducts.length > 0) {
            return getters.allProducts.filter(p => p._id === id)[0]
        } else {
            return state.product
        }
    },
    productsPageIndex: (state) => {
        return state.productsPageIndex
    },
    cartTotalProductsCost: (state) => {
        var total = 0
        for (var i = 0; i < state.cart.length; i++) {
            total += state.cart[i].price * state.cart[i].quantity;
        }
        return total
    }
}

export const authGetters = {
    loggedIn(state) {
        return state.token !== null;
    },
    isManager(state) {
        if(state.user == null) return false;
        return state.user.roles.some(role => role.name == "manager");
    },
    isChef(state) {
        if(state.user == null) return false;
        return state.user.roles.some(role => role.name == "chef");
    },
    isDietitian(state) {
        if(state.user == null) return false;
        return state.user.roles.some(role => role.name == "dietitian");
    },
    isClient(state) {
        if(state.user == null) return false;
        return state.user.roles.some(role => role.name == "client");
    }
}
