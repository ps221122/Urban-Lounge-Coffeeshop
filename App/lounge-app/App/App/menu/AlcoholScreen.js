import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';

const productsAlcohol = [
  {
    productvalue: "1",
    name: "Smirnoff Ice Vodka Mixed Drink 70cl",
    tag: "https://assets.sainsburys-groceries.co.uk/gol/3999417/1/640x640.jpg",
    price: '€3.50',
    description: 'Smirnoff Ice Vodka Mixed Drink 70cl',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "2",
    name: "White Claw Hard Seltzer 330ml",
    tag: "https://static-images.jumbo.com/product_images/040420221002_499263STK-1_360x360_2.png",
    price: '€3.95',
    description: '4 - White Claw Hard Seltzer 330ml.',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "3",
    name: "Heineken Premium Pilsener Bier",
    tag: "https://static.ah.nl/static/gall/img_340806_Gall_500.png",
    price: '€10.95',
    description: 'Heineken Premium Pilsener Bier 6 * 50cl',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "4",
    name: "Bavaria - Pils 33cl",
    tag: "https://syndy-content.azureedge.net/media/products/9bd7d5da-6b58-4634-95f5-487c7fb81164/images/AW0HA3GItENDpZ-NPK0ohvI./AABKcyf-AwDc9AjZUaxZxw.580x580.jpg",
    price: '€7.50',
    description: 'Bavaria - Pils 33cl',
    inCart: 0,
    totalPrice: "€0",
  },

  {
    productvalue: "5",
    name: "Jupiler Belgisch Pils 33cl",
    tag: "https://static.ah.nl/static/gall/img_50591_Gall_500.png",
    price: '€8.00',
    description: 'Jupiler Belgisch Pils 33cl',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "6",
    name: "Grolsch - Pils - 25cl",
    tag: "https://static.ah.nl/dam/product/AHI_43545239383235343039?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary",
    price: '€9.40',
    description: 'Grolsch - Pils - 25cl',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "7",
    name: "Orbea - Pinot Grigio - 750ML",
    tag: "https://www.supermarktaanbiedingen.com/public/images/product/2019/27/0-270258fls-orbea-blush-pinot-grigio-750ml.jpg",
    price: '€4.90',
    description: 'Orbea - Pinot Grigio - 750ML',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "8",
    name: "Excellence - Chardonnay - 750ML",
    tag: "https://www.supermarktaanbiedingen.com/public/images/discount/2018/06/701237.png",
    price: '€5.99',
    description: 'Excellence - Chardonnay - 750ML',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "9",
    name: "Leffe Blond Belgisch Abdijbier Flessen",
    tag: "https://static-images.jumbo.com/product_images/170420210207_275061PAK-1_720x720.png",
    price: '€4.00',
    description: '6 x 30 CL',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "10",
    name: "Ponche Crema Curacao",
    tag: "https://www.universalfws.com/images/product/large/087236657994.jpg",
    price: '€9.75',
    description: 'Ponche Crema Curacao',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "11",
    name: "Pistachio Curacao",
    tag: "https://res.cloudinary.com/saucey/image/upload/v1556913484/ehudf9miyedbpju9jdt7.jpg",
    price: '€8.95',
    description: 'Pistachio Curacao',
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "12",
    name: "Moët & Chandon - Brut Impérial in giftbox",
    tag: "https://cdn.webshopapp.com/shops/82078/files/318220230/image.jpg",
    price: '€6.95',
    description: 'Moët & Chandon - Brut Impérial in giftbox',
    inCart: 0,
    totalPrice: "€0",
  },
];

const AlcoholScreen = () => {
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
      {productsAlcohol.map((foodList, index) => (
        <TouchableOpacity key={index}>
          <View style={[styles.productItemView, styles.shadowProp]}>
            <BouncyCheckbox iconStyle={{
              borderColor: "lightgray",
              borderRadius: 9,
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


export default AlcoholScreen;