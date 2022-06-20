import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';




const productsDrink = [
  {
    productvalue: "1",
    name: "Tick Shake Strawberry",
    tag: "https://www.chelseasmessyapron.com/wp-content/uploads/2020/04/Strawberry-Milkshake-1.jpg",
    price: '€3.95',
    description: 'Tick Shake Strawberry',
  },
  {
    productvalue: "2",
    name: "Thick Shake Banana",
    tag: "https://foodtasia.com/wp-content/uploads/2021/07/banana-milkshake-34.jpg",
    price: '€3.95',
    description: 'Thick Shake Banana',
  },
  {
    productvalue: "3",
    name: "Thick shake Premium caramel",
    tag: "https://www.amytreasure.com/wp-content/uploads/2019/07/2K3A4574.jpg",
    price: '€3.95',
    description: 'Thick shake Premium caramel',
  },
  {
    productvalue: "4",
    name: "0.25 LT Fuze Tea Green Tea",
    tag: "https://static-images.jumbo.com/product_images/080920212317_428484FLS-1_360x360_2.png",
    price: '€2.50',
    description: '0.25 LT Fuze Tea Green Tea',
  },

  {
    productvalue: "5",
    name: "0.33 Liter Coca Cola",
    tag: "https://images.quickoffice.nl/002/600x450/897061p1.jpg",
    price: '€2.00',
    description: '0.33 Liter Coca Cola',
  },
  {
    productvalue: "6",
    name: "0.33 liter Fernandes Cherry",
    tag: "https://media.foox.nl/FT/AFB/high/9492.jpg",
    price: '€2.00',
    description: '0.33 liter Fernandes Cherry',
  },
  {
    productvalue: "7",
    name: "0.33 liter Fanta",
    tag: "https://www.officepalace.nl/autoimg/1406057/400x400/ffffff/frisdrank-fanta-orange-blikje-0-33l-1.jpg",
    price: '€2.00',
    description: '0.33 liter Fanta',
  },
  {
    productvalue: "8",
    name: "0.33 liter Fanta Cassis",
    tag: "https://images.quickoffice.nl/002/600x450/897064p1.jpg",
    price: '€2.00',
    description: '0.33 liter Fanta Cassis',
  },
  {
    productvalue: "9",
    name: "0.33 liter Fernandes Red Grape",
    tag: "https://www.kantinewinkel.nl/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/f/e/fernandes_red_grape_033l_blik.png",
    price: '€2.00',
    description: '0.33 liter Fernandes Red Grape',
  },
  {
    productvalue: "10",
    name: "Fria Grape",
    tag: "https://www.antilliaanse-toko.nl/media/catalog/product/cache/1ca3c8b1c6458f0eb1a5e1747c261955/f/r/fria_grape_chiki.png",
    price: '€2.75',
    description: 'Fria Grape',
  },
  {
    productvalue: "11",
    name: "0.5 liter Chaudfontaine",
    tag: "https://www.office-deals.nl/images/Water_Chaudfontaine_Blauw_Pet_0_50l(10214555).jpg",
    price: '€2.95',
    description: '0.5 liter Chaudfontaine',
  },
  {
    productvalue: "12",
    name: "Minute Maid",
    tag: "https://www.minutemaid.com/content/dam/nagbrands/us/minutemaidus/en/products/mm-lemonade-product-page.png",
    price: '€4.95',
    description: 'Minute Maid 1-liter',
  },
];


const BeverageScreen = () => {
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
      {productsDrink.map((foodList, index) => (
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



export default BeverageScreen;