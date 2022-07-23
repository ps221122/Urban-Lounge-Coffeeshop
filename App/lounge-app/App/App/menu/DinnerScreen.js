import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';






const productsDinner = [
  {
    productvalue: "1",
    name: "Ackee and saltfish",
    tag: "https://originalflava.com/wp-content/uploads/2014/05/Ackee-saltfish.jpg",
    price: '€10.95',
    description: 'This is Jamaican national dish, made with the national fruit ackee.',
    time: "12 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "2",
    name: "Caribbean Mixed Rice",
    tag: "https://i.ytimg.com/vi/RRjNuRw7RTg/maxresdefault.jpg",
    price: '€10.95',
    description: 'Rice, vegetables, meat, sauce, herbs, spices, egg',
    time: "29 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "3",
    name: "Curry goat/mutton/chicken",
    tag: "https://www.simplyrecipes.com/thmb/Atrxn7aREhzIuLu2h9QmmXd9ziA=/1600x900/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2010__09__jamaican-curry-goat-horiz-a-1600-b03148154b1a4ab4a9d1859b64039174.jpg",
    price: '€10.98',
    description: 'Incredibly tasty slow cooked Jamaican Spiced Curry that is full of flavor and tender to the bone!',
    time: "21 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "4",
    name: "Crispy Fried Red Snapper With Sauce",
    tag: "https://i.pinimg.com/originals/e3/40/f0/e340f0ff6b7c3a027c1e4aa86d3ee56b.jpg",
    price: '€10.99',
    description: 'It is best to ask if the fishmonger cleans the Snappers, that is the most convenient.',
    time: "12 min",
    inCart: 0,
    totalPrice: "€0",
  },

  {
    productvalue: "5",
    name: "Steamed Fish with Dumplings",
    tag: "https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_38/1777805/ginger-scallion-fish-main-jc-210921.jpg",
    price: '€11.95',
    description: 'This is an easy way to cook whole fish, but one that few western cooks have mastered.',
    time: "13 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "6",
    name: "Red Peas Soup",
    tag: "https://www.antilliaans-eten.nl/wp-content/uploads/2017/12/website1.jpg",
    price: '€11.99',
    description: 'A traditional Antillean soup, for the Antilleans this soup with red kidney beans is the ultimate comfort food.',
    time: "29 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "7",
    name: "Guiambo met Funchi",
    tag: "https://www.antilliaans-eten.nl/wp-content/uploads/2012/07/Jambo-om.jpg",
    price: '€12.95',
    description: 'Okra soup is prepared using the edible green seed pods of the okra flowering plant as the primary ingredient. It is greenish in color.',
    time: "16 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "8",
    name: "Tutu & Kabritu",
    tag: "https://i.pinimg.com/474x/fa/8b/b7/fa8bb75be8381a1a446580fbd18bfbe0.jpg",
    price: '€12.99',
    description: 'goat, broth, garlic, onion, pepper, tomato, herbs, vegetables, sauce.',
    time: "17 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "9",
    name: "STEWED OXTAIL",
    tag: "https://soulfood.nl/wp-content/uploads/2021/05/website1-2-1170x780.jpg",
    price: '€13.95',
    description: 'Making the traditional oxtail stew takes some time, but as they say: "then you have something!". It is the ideal dish to make on the weekend.',
    time: "29 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "10",
    name: "Tandoori Chicken",
    tag: "https://i.ytimg.com/vi/BKxGodX9NGg/maxresdefault.jpg",
    price: '€13.20',
    description: 'Amazing Indian dish with tenderloin chicken off the sizzles 🔥',
    time: "16 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "11",
    name: "Chicken Foot Soup",
    tag: "https://www.bestdressedchicken.com/wp-content/uploads/2019/01/DJI_Cycle_4_JBG_20181218_0037.jpg",
    price: '€14.95',
    description: 'Chicken foot soup is a popular Jamaican one-pot dish with ingredients such as chicken foot, pumpkins, carrots, yams, potatoes and seasonings such as allspice, thyme and salt. It is traditionally prepared on Saturdays for dinner.',
    time: "27 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "12",
    name: "Ratatouille",
    tag: "https://bettyskitchen.nl/wp-content/uploads/2020/11/ratatouille_maken_%C2%A9-bettyskitchen_IMG_9351.jpg",
    price: '€15.00',
    description: 'Its ratatouille season! Ratatouille is a classic French end- of - summer stew thats fun to say (rat-tuh-TOO-ee) and fun to make.',
    time: "24 min",
    inCart: 0,
    totalPrice: "€0",
  },
];

const DinnerScreen = () => {
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
    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
      {productsDinner.map((foodList, index) => (
        <TouchableOpacity key={index} activeOpacity={1}>
          <View style={[styles.productItemView, styles.shadowProp]}>
            <BouncyCheckbox iconStyle={{
              borderColor: "lightgray",
              borderRadius: 40,
              width: 30,
              height: 30,
              marginLeft: 15,
              marginBottom: 15,
            }}
              fillColor="green"
              unfillColor='#F8F8FF'
              onPress={(checkboxValue) => selectItem(foodList, checkboxValue)}
              isChecked={isFoodInCart(foodList, cartItems)} />
            <FoodInfo foodList={foodList} />
            <FoodImage foodList={foodList} />
          </View>
          <Divider width={1} orientation="center" style={{ marginHorizontal: 20, }} />
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

  var itemPrice = props.foodList.price.replace("€", "");
  var totalItemPrice = itemPrice * count;
  totalItemPrice.toFixed(2);
  props.foodList.totalPrice = "€" + totalItemPrice;
  return (
    <View style={{ width: 240, justifyContent: 'space-evenly', }}>

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



export default DinnerScreen;