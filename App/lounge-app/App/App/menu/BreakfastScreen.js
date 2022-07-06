import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';



const productsOntbijt = [
    {
        productvalue: "1",
        name: "Coconut Pancakes with Fried Pineapple",
        tag: "https://media.istockphoto.com/photos/banana-pancakes-with-maple-syrup-picture-id500965580?k=20&m=500965580&s=612x612&w=0&h=NaYdj60LRDKlB6XBrL88nf3sHrY_H_LMf8FCPnsf_yg=",
        price: '€6.95',
        description: 'The Caribbean flavors of these coconut pancakes with fried pineapple in a sauce of brown sugar, cinnamon and rum.',
        time: "15 min",
        inCart: 0,
        totalPrice: 0,
    },
    {
        productvalue: "2",
        name: "French Toast",
        tag: "https://media.istockphoto.com/photos/french-toast-with-fruit-and-syrup-on-a-marble-countertop-picture-id171269841?k=20&m=171269841&s=612x612&w=0&h=dPKhFO8ThDnsbVQ77NDxtdtRbOIMcKCljWM5fCi2Xg8=",
        price: '€7.95',
        description: 'French Toast I really think is pure comfort food.',
        time: "14 min",
        inCart: 0,
    },
    {
        productvalue: "3",
        name: "Elvis Presley waffles, Bread Booze Bacon",
        tag: "https://media.istockphoto.com/photos/waffle-and-bacon-picture-id584479478?b=1&k=20&m=584479478&s=170667a&w=0&h=d5ZShxj9NACMbD2JObqcsLn0ZdUUVUOdn-a8qFS7J_w=",
        price: '€8.99',
        description: 'Elvis Waffles! Delicious soft waffles topped with banana, peanut butter and caramelized bacon.',
        time: "18 min",
        inCart: 0,
    },
    {
        productvalue: "4",
        name: "Cornmeal porridge",
        tag: "https://thatgirlcookshealthy.com/wp-content/uploads/2020/03/cornmeal-porridge-image.jpg",
        price: '€8.99',
        description: 'An old favorite among Jamaicans, cornmeal porridge is a go-to meal if you want a hearty, healthy start to the day..',
        time: "25 min",
        inCart: 0,
    },
    {
        productvalue: "5",
        name: "Ackee and saltfish",
        tag: "https://originalflava.com/wp-content/uploads/2014/05/Ackee-saltfish.jpg",
        price: '€9.95',
        description: 'Saltfish and ackee is the national dish of Jamaica and is traditionally served with these dumplings.',
        time: "23 min",
        inCart: 0,
    },
    {
        productvalue: "6",
        name: "Fried eggs with bread and plantain sandwich",
        tag: "https://www.24kitchen.nl/files/styles/social_media_share/public/2020-11/shutterstock_537319213.jpg?itok=C_Gr65ZO",
        price: '€9.99',
        description: 'Fried eggs and plantain with butter toasted bread with chocolate & or coffee',
        time: "16 min",
        inCart: 0,
    },
    {
        productvalue: "7",
        name: "All in 1 special",
        tag: "https://simply-delicious-food.com/wp-content/uploads/2018/10/breakfast-board-500x375.jpg",
        price: '€9.85',
        description: 'Pastries,Eggs,Bacon,Yogurt,Jams and spreads,Fruit',
        time: "09 min",
        inCart: 0,
    },
    {
        productvalue: "8",
        name: "EggyBurrito menu",
        tag: "https://www.cookingclassy.com/wp-content/uploads/2019/08/breakfast-burrito-01.jpg",
        price: '€10.95',
        description: 'Spice up your morning with bell pepper, onions, fluffy scrambled eggs, sausage and melty cheese, all wrapped in a soft tortilla.',
        time: "10 min",
        inCart: 0,
    },
    {
        productvalue: "9",
        name: "Steamed cabbage with fried dumpling",
        tag: "https://i.pinimg.com/736x/0e/ca/c3/0ecac3d403d00bc7fd5625bf1b47d579.jpg",
        price: '€10.99',
        description: 'But when its cooked, its not only an excellent choice - its also very tasty.And this particular recipe is particularly good.',
        time: "29 min",
        inCart: 0,
    },
    {
        productvalue: "10",
        name: "Big Breakfast menu",
        tag: "https://img.favpng.com/12/20/20/breakfast-scrambled-eggs-mcdonald-s-big-mac-english-muffin-hash-browns-png-favpng-avrpthAAwqaZ6LzYcifZYB2Cq.jpg",
        price: '€12.34',
        description: 'Delicious scrambled eggs, bread and sausage muffin. You can also ask for it with hash browns and a nourishing orange juice or an aromatic coffee.',
        time: "28 min",
        inCart: 0,
    },
    {
        productvalue: "11",
        name: "Breakfast pizza with avocado and fried egg menu",
        tag: "https://skinnyms.com/wp-content/uploads/2013/10/Avocado-Breakfast-Pizzas-1.jpg",
        price: '€12.95',
        description: 'Breakfast pizza with avocado and fried egg with hot coffee or chocolate milk',
        time: "08 min",
        inCart: 0,
    },
    {
        productvalue: "12",
        name: "Ayaka",
        tag: "https://www.savemorefoodstores.com/storage/app/uploads/public/5a9/d45/d1b/thumb_386_600_400_0_0_auto.jpg",
        price: '€12.96',
        description: 'Hallaca is a traditional dish from Venezuela that looks like a tamal but differs in taste, texture, ingredients and cultural significance',
        time: "25 min",
        inCart: 0,
    },
];


const BreakfastScreen = () => {
    const dispach = useDispatch();
    const selectItem = (item, checkboxValue) =>
        dispach({
            type: "ADD_TO_CART",
            payload: { ...item, checkboxValue: checkboxValue, }

        });
    const cartItems = useSelector(
        (state) => state.cartReducer.selectedItems.items
    );

    const isFoodInCart = (foodList, cartItems) =>
        Boolean(cartItems.find((item) => item.name === foodList.name));

    
    
    return (
        <ScrollView>
            {productsOntbijt.map((foodList, index) => (
                <TouchableOpacity key={index} activeOpacity={1}>
                    <View style={[styles.productItemView, styles.shadowProp]}>
                        <BouncyCheckbox iconStyle={{
                            borderColor: "lightgray",
                            borderRadius: 50,
                        }}
                            fillColor={colors.Green}
                            unfillColor={colors.secondary}
                            onPress={(checkboxValue) => selectItem(foodList, checkboxValue)}
                            isChecked={isFoodInCart(foodList, cartItems)} />
                        <FoodInfo foodList={foodList} />
                        <FoodImage foodList={foodList} />
                    </View>
                    <Divider style={styles.divider} />
                </TouchableOpacity>
            ))}
        </ScrollView>
    );
}


const FoodInfo = (props) => {
    var [count, setCount] = useState(1);
    var onPressPlus = () => setCount(prevCount => prevCount + 1);
    var onPressMinus = () => setCount(prevCount => prevCount - 1);
    if (count <= 0) {
        count = + 1;
    }
    else if (count >= 50) {
        Alert.alert("please call Urban Lounge Coffeeshop for a large order")
        count = 50;
    }
    return (
        <View style={{ width: 245, justifyContent: 'space-evenly', }}>
            <View>
                <Text style={styles.title}>{props.foodList.name}</Text>
                <Text style={styles.description}>{props.foodList.description}</Text>
            </View>


            <View style={styles.timePriceContainer}>
                <Text style={styles.time}>{props.foodList.time}</Text>
                <Text style={styles.price}>{props.foodList.price}</Text>
            </View>


            <View style={styles.outerQuantityContainer}>
                <TouchableOpacity style={styles.outerQuantityButton} onPress={onPressPlus}>
                    <MaterialCommunityIcons name='plus' color={colors.DimGray} style={styles.quantityText} />
                </TouchableOpacity>
                <Text style={styles.quantityText}>{props.foodList.inCart = count}</Text>
                <TouchableOpacity style={styles.outerQuantityButton} onPress={onPressMinus}>
                    <MaterialCommunityIcons name='minus' color={colors.DimGray} style={styles.quantityText} />
                </TouchableOpacity>
            </View>

        </View>
    )
}

const FoodImage = (props) => (
    <View>
        <Image source={{ uri: props.foodList.tag }} style={styles.image} />
    </View>
)


const styles = StyleSheet.create({
    outerQuantityContainer: {
        marginVertical: 10,
        alignSelf: 'center',
        flexDirection: 'row',
        alignItems: 'center'
    },
    outerQuantityButton: {
        backgroundColor: colors.Gainsboro,
        borderRadius: 25,
        justifyContent: 'center',
    },
    quantityText: {
        fontSize: 18,
        marginHorizontal: 8,
    },
    timePriceContainer: {
        flexDirection: "row",
        justifyContent: 'space-evenly',
        marginLeft: -20,
    },
    divider: {
        marginHorizontal: 20,
    },
    productItemView: {
        flexDirection: 'row',
        justifyContent: 'space-evenly',
        margin: 10,

    },
    shadowProp: {
        shadowColor: '#171717',
        shadowOffset: { width: -2, height: 5 },
        shadowOpacity: 0.2,
        shadowRadius: 3,
    },
    image: {
        width: Platform.OS === "android" ? 70 : 110,
        height: 120,
        borderRadius: 15,
        marginRight: 5,
        marginLeft: 5,
    },
    title: {
        fontSize: 18,
        marginBottom: 7,
        fontWeight: '400',
        fontStyle: 'italic',
    },
    background: {
        flex: 1,
        justifyContent: "center",
        width: 100,
        height: 100,
    },
    price: {
        fontSize: 18,
        color: colors.BabyBlue,
        marginTop: 7,
    },
    description: {
        fontSize: Platform.OS === "android" ? 12 : 13,
    },
    time: {
        marginTop: 5,
        fontSize: 16,
        color: colors.Cherry,
    },
})



export default BreakfastScreen;