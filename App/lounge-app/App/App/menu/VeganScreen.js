import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';


const productsVegan = [
  {
    productvalue: "1",
    name: "Pizza Veggi",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVVE/NL_PVVE_all_hero_9508.jpg?v-1039492046",
    price: '€7.95',
    description: 'Tomato sauce, mozzarella, mushrooms, bell pepper, onion, fresh spinach and fresh tomato.',
    time: "15 min",
    inCart: 0,
  },
  {
    productvalue: "2",
    name: "Pizza Caprese",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PCAP/NL_PCAP_all_hero_9398.jpg?v609786223",
    price: '€7.99',
    description: 'Tomato sauce, fresh spinach, fresh tomato, pizza herbs, pesto & extra mozzarella.',
    time: "12 min",
    inCart: 0,
  },
  {
    productvalue: "3",
    name: "Pizza Veggi Pesto Pollo",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVPP/NL_PVPP_all_hero_7823.jpg?v-524881868",
    price: '€7.95',
    description: 'Tomato sauce, mozzarella, vegetarian chicken, fresh tomato, onion and a pesto swirl.',
    time: "09 min",
    inCart: 0,
  },
  {
    productvalue: "4",
    name: "Pizza Vegan Veggi",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVEG/NL_PVEG_all_hero_9398.jpg?v1465047760",
    price: '€8.99',
    description: 'Tomato sauce, vegan cheese, mushrooms, fresh tomato, bell pepper, spinach and onion.',
    time: "19 min",
    inCart: 0,
  },

  {
    productvalue: "5",
    name: "Vegan Margaritha",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVMA/NL_PVMA_all_hero_9508.jpg?v-180133423",
    price: '€8.99',
    description: 'Tomato sauce, vegan cheese, extra vegan cheese & pizza herbs',
    time: "26 min",
    inCart: 0,
  },
  {
    productvalue: "6",
    name: "Vegan Funghi",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVFH/NL_PVFH_all_hero_9508.jpg?v-1413036897",
    price: '€8.99',
    description: 'Tomato sauce, vegan cheese, mushrooms & pizza herbs.',
    time: "11 min",
    inCart: 0,
  },
  {
    productvalue: "7",
    name: "Pizza Margaritha (Glutenvrij)",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PMAFGG/NL_PMAFGG_all_hero_9398.jpg?v-1158225617",
    price: '€9.99',
    description: 'Tomato sauce, extra mozzarella and a gluten-free base (20 cm).',
    time: "17 min",
    inCart: 0,
  },
  {
    productvalue: "8",
    name: "Pizza Perfect Pepperoni(Glutenvrij)",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PPPFGG/NL_PPPFGG_all_hero_7544.jpg?v34823017",
    price: '€9.99',
    description: 'Tomato sauce, mozzarella and & pepperoni on a gluten-free base (20 cm).',
  }, {
    productvalue: "9",
    name: "Vegan Zwarte Truffel",
    tag: "https://images.newyorkpizza.nl/Products/Original/Vegan_truffel-8068.png",
    price: '€10.99',
    description: 'Tomato sauce, vegan cheese, mushroom, truffle tapenade, parsley and garlic on the rim.',
    time: "10 min",
    inCart: 0,
  },
  {
    productvalue: "10",
    name: "Vegan Shoarma Pizza",
    tag: "https://images.newyorkpizza.nl/Products/Original/Vegan_Shoarma-8070.png",
    price: '€10.99',
    description: 'Tomato sauce, red onion, vegan garlic swirl, vegan cheese, vegan chicken shoarma with garlic oil on the rim.',
    time: "28 min",
    inCart: 0,
  },
  {
    productvalue: "11",
    name: "Pizza Tonno",
    tag: "https://www.dominos.nl/ManagedAssets/NL/product/PTON/NL_PTON_all_hero_7544.jpg?v1659828722",
    price: '€11.99',
    description: 'Tomato sauce, tuna, onion & extra mozzarella.',
    time: "15 min",
    inCart: 0,
  },
  {
    productvalue: "12",
    name: "BBQ Bacon & Chicken(Glutenvrij)",
    tag: "https://images.newyorkpizza.nl/Products/Original/BBQ_Bacon-8045.png",
    price: '€12.99',
    description: 'BBQ sauce, mozzarella, red onion, bell pepper, chicken, bacon (100% chicken) swirl of bbq sauce and garlic oil on the rim.',
    time: "13 min",
    inCart: 0,
  },

];

const VeganScreen = () => {
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
      {productsVegan.map((foodList, index) => (
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
export default VeganScreen;