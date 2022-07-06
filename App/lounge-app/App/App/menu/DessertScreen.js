import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';


const productDesserts = [
  {
    productvalue: "1",
    name: "Dutch Stroopwafel",
    tag: "https://cdn.pixabay.com/photo/2021/01/28/12/02/stroopwafels-5957805_960_720.jpg",
    price: '€3.95',
    description: 'Stroopwafels feature two thin, crispy waffle- like wafers surrounding a creamy, caramel - flavored center made from molasses, brown sugar, butter, and cinnamon.',
    time: "05 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "2",
    name: "Dutch Apple Pie",
    tag: "https://www.cookingclassy.com/wp-content/uploads/2019/11/dutch-apple-pie-4.jpg",
    price: '€4.95',
    description: 'The crust is warm and flaky, and the filling is chunky, sweet, and spicy. But you would not stop there!',
    time: "03 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "3",
    name: "Oliebollen (Dutch Doughnuts)",
    tag: "https://leitesculinaria.com/wp-content/uploads/2018/11/oliebollen-dutch-doughnuts-fp.jpg",
    price: '€5.95',
    description: 'Its hard to decide what to love more about these warm, deep-fried delicacies: their incredible taste or how fun it is to say their name.',
    time: "06 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "4",
    name: "Bulla cake",
    tag: "http://cdn.shopify.com/s/files/1/1621/1905/products/IMG_20180918_124054_grande.jpg?v=1538400932",
    price: '€6.99',
    description: 'Bulla cake has a round and flat shape, and it is made with flour, molasses, and baking powder. It can be either light- or dark-colored and is often spiced with ginger or nutmeg.',
    time: "26 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "5",
    name: "Sweet potato pudding",
    tag: "https://serenalissy.com/wp-content/uploads/2021/11/Jamaican-Sweet-Potato-Pudding-Recipe-500x375.jpg",
    price: '€7.95',
    description: 'Sweet potato pudding is a favorite Sunday dessert throughout Jamaica, consisting of sweet potatoes, flour, coconut milk, dried fruits, and flavorings such as vanilla, nutmeg, sugar, and salt.',
    time: "29 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "6",
    name: "Bun & Cheese",
    tag: "https://www.caribbeannationalweekly.com/wp-content/uploads/2020/04/BunCheese.jpg",
    price: '€8.99',
    description: 'Bun and Cheese comes packaged as a traditional loaf, and is most commonly eaten sandwich-style, by cutting individual slices and adding slices of cheese in between, hence the “Bun and Cheese.(ONLY Available: during easter).',
    time: "08 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "7",
    name: "Li di fruta",
    tag: "https://www.antilliaans-eten.nl/wp-content/uploads/2015/08/lidifruta_snippet.jpg",
    price: '€2.95',
    description: 'Gecondenseerde melk, melk, bosvruchten, suiker, essence',
    time: "08 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "8",
    name: "Li di Pinda",
    tag: "http://recepten999.nl/cache/37/3768cebfc27f4a12e6a0ad15c3cebf5d.jpg",
    price: '€2.99',
    description: 'semi-skimmed milk, water, white sugar, vanilla aroma, peanut butter',
    time: "04 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "9",
    name: "Caramel Pecan Ice-cream",
    tag: "https://cdn.shopify.com/s/files/1/0179/4028/3492/products/75261821204-1_832x1000.jpg?v=1606339658",
    price: '€3.95',
    description: '1 pint of Caramel Pecan Ice-cream',
    time: "03 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "10",
    name: "Tumba Ice-Cream",
    tag: "https://static.wixstatic.com/media/5f01d5_1138df17952c44849608286b4091bba9~mv2.png/v1/fill/w_960,h_350,al_c,lg_1,q_85,enc_auto/5f01d5_1138df17952c44849608286b4091bba9~mv2.png",
    price: '€3.99',
    description: '4 diffrent flavours: Vanilla, Tamarinda, Strawberry, Peanut',
    time: "04 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "11",
    name: "Arepa di pampuna",
    tag: "https://i1.wp.com/www.kruimelsenkaneel.nl/wp-content/uploads/2016/11/pompoenpannekoeken.jpg?fit=2636%2C1768&ssl=1",
    price: '€4.95',
    description: 'Arepa di pampuna are Antillean pumpkin pancakes.',
    time: "10 min",
    inCart: 0,
    totalPrice: "€0",
  },
  {
    productvalue: "12",
    name: "Pandushi",
    tag: "https://www.antilliaans-eten.nl/wp-content/uploads/2018/01/pandushiwebsite.jpg",
    price: '€4.99',
    description: 'Making delicious Pandushi Kokolishi for a delicious and sweet dessert',
    time: "18 min",
    inCart: 0,
    totalPrice: "€0",
  },
]


const DessertScreen = () => {
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
      {productDesserts.map((foodList, index) => (
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


export default DessertScreen;