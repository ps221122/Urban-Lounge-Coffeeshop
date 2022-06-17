import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';




const productWeed = [
  {
    productValue: "1",
    name: 'King Louis',
    description: "The Strongest Strain for Sleep",
    image: "https://thcdesign.com/wp-content/uploads/2020/11/THC-Design-King-Louis-Main-Image.jpg",
    strain: '💪🦾💪',
    price: '€8.95',
    inCart: 0,
  },
  {
    productValue: "2",
    name: 'Granddaddy Purple',
    description: "The Strongest Strain for Anxiety",
    strain: '💪💪',
    image: "https://leafly-public.imgix.net/strains/reviews/photos/granddaddy-purple__primary_e3f3.jpg",
    price: '€8.00',
    inCart: 0,
  },
  {
    productValue: "3",
    name: 'Grape Ape',
    description: "The Strongest Strain for Pain",
    strain: '💪',
    image: "https://weed-seeds.com/wp-content/uploads/2021/03/Buy-Grape-Ape-Strain-Seeds-Online-in-the-USA.jpg",
    price: '€7.95',
    inCart: 0,
  },
  {
    productValue: "4",
    name: 'Cinderella 99',
    description: "The Strongest Strain for Energy",
    strain: '💪💪',
    image: "https://www.alchimiaweb.com/images/l/cinderella-99_16418_1_20220216103213_.jpg",
    price: '€7.00',
    inCart: 0,
  },
  {
    productValue: "5",
    name: 'Wedding Crasher',
    description: "The Strongest Strain for Focus",
    strain: '💪💪',
    image: "https://greenstonefire.com/wp-content/uploads/2020/02/Wedding-Crasher-Denver-Colorado-Greenstone.jpg",
    price: '€6.95',
    inCart: 0,
  },
  {
    productValue: "6",
    name: 'Vanilla Frosting',
    description: "The Strongest Strain for Creativity",
    strain: '💪💪💪',
    image: "https://www.seed-city.com/components/com_virtuemart/shop_image/product/Vanilla_Frosting_5e25df5d9fb5e.jpg",
    price: '€6.00',
    inCart: 0,
  },
  {
    productValue: "7",
    name: 'White Widow',
    description: "The Strongest Strain for Socializing",
    strain: '💪💪',
    image: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/White_widow.jpg/1200px-White_widow.jpg",
    price: '€5.95',
    inCart: 0,
  },
  {
    productValue: "8",
    name: 'Enemy of the State',
    description: " Super Strains is an old school indica whose genetics have been lent to several other successful strains over the years.",
    strain: '💪',
    image: "https://www.wietzaadjes.nl/media/catalog/product/resized/500//s/u/super-strains-enemy-of-the-state-feminised.jpg",
    price: '€5.00',
    inCart: 0,
  },
  {
    productValue: "9",
    name: 'Sundae Driver',
    description: "The Strongest Strain for Happiness",
    strain: '💪💪',
    image: "https://homegrownursery.com/wp-content/uploads/2018/11/Sundae-Driver.jpg",
    price: '€4.95',
    inCart: 0,
  },
  {
    productValue: "10",
    name: 'Jack Herer',
    description: "consumers typically describe this 55% sativa hybrid as blissful, clear-headed, and creative",
    strain: '💪',
    image: "https://www.zamnesia.nl/3099-13557/greenhouse-seeds-jack-herer-Auto-feminized.jpg",
    price: '€4.00',
    inCart: 0,
  },
  {
    productValue: "11",
    name: 'Sour Diesel',
    description: "Sour Diesel effects are dreamy, cerebral, fast-acting and energizing.",
    strain: '💪💪💪',
    image: "https://www.nirvanashop.com/1311-nr1_700/sour-diesel-gefeminiseerd.jpg",
    price: '€3.95',
    inCart: 0,
  },
  {
    productValue: "12",
    name: 'Zkittlez',
    description: "The effects of Zkittlez are calming, leaving consumers focused, alert, and happy while relaxing the body to help unwind any time of day.",
    strain: '💪💪',
    image: "https://www.cnnbs.nl/wp-content/uploads/2018/08/Zkittlez-gefeminiseerd1.jpg",
    price: '€3.50',
    inCart: 0,
  },

]

const WeedScreen = () => {
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
      {productWeed.map((foodList, index) => (
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
    <View style={{ width: 240, justifyContent: 'space-evenly', }}>

      <View>
        <Text style={styles.title}>{props.foodList.name}</Text>
        <Text style={styles.description}>{props.foodList.description}</Text>
      </View>


      <View style={styles.timePriceContainer}>
        <Text style={styles.time}>{props.foodList.strain}</Text>
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
    <Image source={{ uri: props.foodList.image }} style={styles.image} />
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



export default WeedScreen;