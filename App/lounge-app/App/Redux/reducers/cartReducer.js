let defaultState = {
    selectedItems: { items: [], foodName: "", },
};

let cartReducer = (state = defaultState, action) => {
    switch (action.type) {
        case "ADD_TO_CART": {
            let newState = { ...state };

            if (action.payload.checkboxValue) {
                console.log("ADD TO CART");

                newState.selectedItems = {
                    items: [...newState.selectedItems.items, action.payload],
                    foodName: action.payload.foodName,
                };
            } else {
                console.log("REMOVE FROM CART", "👉");
                newState.selectedItems = {
                    items: [
                        ...newState.selectedItems.items.filter(
                            (item) => item.name !== action.payload.name
                        ),
                    ],
                    foodName: action.payload.foodName,
                };
            }
            console.log(newState, "👉");
            return newState;
        }

        default:
            return state;
    }
};

export default cartReducer;