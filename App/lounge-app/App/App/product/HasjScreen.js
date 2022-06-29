import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';





const productHasj = [
  {
    productValue: "1",
    name: 'Gorilla Glue',
    description: "The Gorilla Glue #4 has caught my attention as a hash maker due to the bounty of trichomes that it produces alongside its pervasive and pungent terpene profile and extremely sticky amber gold colored resin.",
    image: "https://images.squarespace-cdn.com/content/v1/5b15b6b825bf0270b8b4f22a/1531405575551-KPY826G06DM0NB6KP83Z/BYOU_Photo_Justin_McIvor_gorilla_glue%234_Ed_Rosenthal.jpg?format=1000w",
    strain: '💪🦾💪',
    price: '€8.95',
    inCart: 0,
  },
  {
    productValue: "2",
    name: 'OG Kush',
    description: "Another reason for OG Kush’s intriguing nature is the mysterious stories and rumors surrounding its genu-ine origin. As far as the story goes, a grower by the name of Josh D, originally from New Jersey, moved to the San Fernando Valley in 1987 to pursue his passion of growing cannabis.",
    strain: '💪💪',
    image: "https://images.squarespace-cdn.com/content/v1/5b15b6b825bf0270b8b4f22a/1531405655150-JF602XSBWJMIJY4B1USM/BYOU_Photo_Nadim_Sabella_OG-Kush_Ed_Rosenthal.jpg?format=1000w",
    price: '€8.00',
    inCart: 0,
  },
  {
    productValue: "3",
    name: 'NYC Diesel',
    description: "This resulted in a cerebral, talkative, yet all over body relaxing Sativa hybrid. ",
    strain: '💪',
    image: "https://images.squarespace-cdn.com/content/v1/5b15b6b825bf0270b8b4f22a/1531405787446-EJAGCAJVU82I00A285FE/BYOU_Photo_Justin_McIvor_nyc_diesel_Ed_Rosenthal.jpg?format=1000w",
    price: '€7.95',
    inCart: 0,
  },
  {
    productValue: "4",
    name: 'Harlequin',
    description: "Harlequin, known for its high CBD content, pain relief, as well as its anti-inflammatory and anti-seizure properties, is a Sativa dominant landrace strain that was only really discovered and preserved, like most other CBD strains, due to the demand of cannabinoid potency testing within the legal regulated industry.",
    strain: '💪💪',
    image: "https://sklepsativa.pl/environment/cache/images/300_300_productGfx_1743/Susz-konopny-Harlequin.jpg",
    price: '€7.00',
    inCart: 0,
  },
  {
    productValue: "5",
    name: 'The White',
    description: "Originating in the Orlando, Florida region, this extremely rare and unique Indica dominating clone-only strain dubbed The White, has a completely unknown lineage.",
    strain: '💪💪',
    image: "https://superwietonline.com/wp-content/uploads/2019/04/white-choco.jpg",
    price: '€6.95',
    inCart: 0,
  },
  {
    productValue: "6",
    name: 'Presidential OG',
    description: "If you’ve ever heard a rapper say they were smoking that Obama, chances are they were talking about Presidential OG, not Obama Kush. ",
    strain: '💪💪💪',
    image: "https://cannabispharmuk.com/wp-content/uploads/2021/01/7-12.jpg",
    price: '€6.00',
    inCart: 0,
  },
  {
    productValue: "7",
    name: 'Aliens On Moonshine',
    description: "What if I want to get maximum flavor with a minimum high?” Then youre in luck, because the CBD-dominant Aliens On Moonshine is here for your headtop. ",
    strain: '💪💪',
    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPO8tJ61_7EPz7lIS9rnzBdU1bloKKB1KG1a_XyVccUVmiAajaRVgbfprznAJu95RDoW0&usqp=CAU",
    price: '€5.95',
    inCart: 0,
  },
  {
    productValue: "8",
    name: 'Cookies and Cream',
    description: "A sweet and earthy cross of GSC and Starfighter, when processed as hash, this strain really comes through with a dominant diesel-like flavor that’ll appease any hash consumer looking for a potent hybrid.",
    strain: '💪',
    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSZD6AY7KbfgaX-MLS5tGXtB0tcEwzokCm6rlDyxDRlnJ9gRyjg3p9F-zclfCsmLs6b0Q&usqp=CAU",
    price: '€5.00',
    inCart: 0,
  },
  {
    productValue: "9",
    name: 'Blue Hash',
    description: " Blue Hash produces a powerfully relaxing effect that is a great way to unwind at the end of a long day or at night before bedtime.",
    strain: '💪💪',
    image: "https://strivegrandforks.com/wp-content/uploads/2020/06/ATF.png",
    price: '€4.95',
    inCart: 0,
  },
  {
    productValue: "10",
    name: 'Blackberry Hash',
    description: "It delivers well-balanced (although not long-lasting) effects whose potency varies among consumers. ",
    strain: '💪',
    image: "https://leafly-public.imgix.net/strains/reviews/photos/blackberry-hashplant_825x550_v5fje42s.svi.jpg",
    price: '€4.00',
    inCart: 0,
  },
  {
    productValue: "11",
    name: 'Hashberry',
    description: "The effects begin swiftly and slowly plateau to the mellow phase.",
    strain: '💪💪💪',
    image: "https://www.bonzaseeds.com/blog/wp-content/uploads/2019/03/hashberry-strain.jpg",
    price: '€3.95',
    inCart: 0,
  },
  {
    productValue: "12",
    name: 'Hashbar OG',
    description: "TIn the old days of clandestine growing, people found many strains to be unsuitable for stealthy indoor grows.",
    strain: '💪💪',
    image: "https://images.leafly.com/flower-images/defaults/long-fluffy-wispy/strain-8.png",
    price: '€3.50',
    inCart: 0,
  },

]

const HasjScreen = () => {
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
      {productHasj.map((foodList, index) => (
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




export default HasjScreen;