import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';



const productsPizza = [
  {
    productvalue: "1",
    name: "Bacon & cheese gril",
    tag: "https://bestellen.dominos.nl/ManagedAssets/NL/product/PCRB/NL_PCRB_all_hero_7544.jpg?v-328673902",
    price: '€5.95',
    description: 'Tomato sauce, mozzarella, Gouda and cheddar cheese mix & soft French cheese.',
    time: "23 min",
    inCart: 0,
  },
  {
    productvalue: "2",
    name: "Pizza cheese & grilled beef",
    tag: "https://www.dominos.nl/media/0qzbiyqt/p4_menu_400x290px_nl_cheese-grilled-beef-1.jpg",
    price: '€6.95',
    description: 'Tomato sauce, mozzarella, mushrooms, grilled beef, Gouda and cheddar cheese mix, soft French cheese & spring onion.',
    time: "11 min",
    inCart: 0,
  },
  {
    productvalue: "3",
    name: "Pizza grillled beef meatlover",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PPUL/NL_PPUL_all_menu_8769.jpg?v746033714",
    price: '€9.95',
    description: 'Crème frache, BBQ swirl, mozzarella, grilled beef, bacon, ham, onion and spring onion.',
    time: "36 min",
    inCart: 0,
  },
  {
    productvalue: "4",
    name: "Pizza bbq Mixed grill",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PBMG/NL_PBMG_all_hero_7544.png?v-1334956449",
    price: '€8.99',
    description: 'BBQ sauce, mozzarella, bacon, ham, grilled chicken, minced beef, bell pepper & onion.',
    time: "08 min",
    inCart: 0,
  },
  {
    productvalue: "5",
    name: "Pizza frikan'Dutchman",
    tag: "https://www.dominos.nl/media/gfacsp4z/400x290_meaty-macho-1.jpg?width=400&height=290",
    price: '€8.99',
    description: 'Tomato sauce, mozzarella, frikandel, onion, a swirl of mayonnaise and curry.',
    time: "17 min",
    inCart: 0,
  },
  {
    productvalue: "6",
    name: "Pizza BBQ Chicken & Bacon",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PCNB/NL_PCNB_all_hero_8263.jpg?v1349080163",
    price: '€7.99',
    description: 'BBQ sauce, mozzarella, grilled chicken & bacon.',
    time: "26 min",
    inCart: 0,
  },
  {
    productvalue: "7",
    name: "Pizza Shoarma",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_all_hero_9068.jpg?v29382211",
    price: '€8.99',
    description: 'Tomato sauce, mozzarella, shoarma & a swirl of garlic sauce.',
    time: "25 min",
    inCart: 0,
  },
  {
    productvalue: "8",
    name: "Pizza Chicken Kebab",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PKEB/NL_PKEB_all_hero_9068.jpg?v348136352",
    price: '€8.99',
    description: 'Tomato sauce, mozzarella, chicken kebab, onion and a swirl of garlic sauce.',
    time: "15 min",
    inCart: 0,
  }, {
    productvalue: "9",
    name: "Pizza Pepperoni Party",
    tag: "https://www.dominos.be/ManagedAssets/BE/product/PDPP/BE_PDPP_all_hero_9585.jpg?v-793974938",
    price: '€7.99',
    description: 'Tomato sauce, extra pepperoni and mozzarella.',
    time: "12 min",
    inCart: 0,
  },
  {
    productvalue: "10",
    name: "Pizza american Supreme Meatlover",
    tag: "https://bestellen.dominos.nl/ManagedAssets/NL/product/PMLS/NL_PMLS_all_hero_8743.jpg?v1000954861",
    price: '€9.99',
    description: 'BBQ sauce, mozzarella, pepperoni, minced beef, chicken kebab, bacon & onion.',
    time: "20 min",
    inCart: 0,
  },
  {
    productvalue: "11",
    name: "Pizza Hawaii",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PHAW/NL_PHAW_all_hero_9068.jpg?v-619998184",
    price: '€7.99',
    description: 'Tomato sauce, ham, pineapple & extra mozzarella.',
    time: "07 min",
    inCart: 0,
  },
  {
    productvalue: "12",
    name: "Pizza Extravaganzza",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PEXT/NL_PEXT_all_hero_7544.jpg?v-671108335",
    price: '€8.99',
    description: 'Tomato sauce, ham, pepperoni, minced beef, mushrooms, black olives, bell pepper, onion & extra mozzarella.',
    time: "18 min",
    inCart: 0,
  },
];


const PizzaScreen = () => {
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
      {productsPizza.map((foodList, index) => (
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
    margin: 15,

  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: -2, height: 5 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
  image: {
    width: 110,
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
    fontSize: 13,
  },
  time: {
    marginTop: 5,
    fontSize: 18,
    color: colors.Cherry,
  },
})



export default PizzaScreen;