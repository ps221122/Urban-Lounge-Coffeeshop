import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, Image, ScrollView, Alert, Platform, } from 'react-native';
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BouncyCheckbox from 'react-native-bouncy-checkbox';
import colors from '../../Config/colors';



const productsPasta = [
  {
    productvalue: "1",
    name: "Shirmp Pasta Alfredo",
    tag: "https://www.dinneratthezoo.com/wp-content/uploads/2018/06/shrimp-alfredo-6.jpg",
    price: '€9.95',
    description: 'Butter, Shrimp, Fettuccine, Heavy cream, Parmesan cheese.',
    time: "29 min",
    inCart: 0,
  },
  {
    productvalue: "2",
    name: "Pasta BigolÍ",
    tag: "https://media-cdn.greatbritishchefs.com/media/mdmlndcb/img76899.jpg?mode=crop&width=768&height=512",
    price: '€9.95',
    description: 'onion, anchovies, white wine, bigoli pasta, parsley, black pepper.',
    time: "15 min",
    inCart: 0,
  },
  {
    productvalue: "3",
    name: "Pasta Tortellini",
    tag: "https://image.15gram.be/uploads/recipes/9579_tortellini-met-spinazie-en-mascarponecitroensaus_1597233961-1920x1280.jpg",
    price: '€10.95',
    description: 'Tortellini, romatomatoes, garlic, tomatoes, Parmigiano Reggiano, fresh basil, fennel bulb, fresh spinach.',
    time: "20 min",
    inCart: 0,
  },
  {
    productvalue: "4",
    name: "Fettuccine Alfredo",
    tag: "https://www.modernhoney.com/wp-content/uploads/2018/08/Fettuccine-Alfredo-Recipe-1.jpg",
    price: '€10.99',
    description: 'Butter, garlic, mushrooms, heavy whipping cream, fettuccine, parmesan cheese, pasta water, salt, black pepper, parsley.',
    time: "19 min",
    inCart: 0,
  },

  {
    productvalue: "5",
    name: "Lasagna",
    tag: "https://www.modernhoney.com/wp-content/uploads/2019/08/Classic-Lasagna-14-scaled.jpg",
    price: '€11.95',
    description: 'sweet Italian sausage, ground beef, onion, garlic, tomato paste, tomato sauce, white sugar, dried basil leaves, fennel seeds, Italian seasoning, salt, black pepper, parsley',
    time: "24 min",
    inCart: 0,
  },
  {
    productvalue: "6",
    name: "Garlic Glazed Noodle",
    tag: "https://tiffycooks.com/wp-content/uploads/2021/09/Screen-Shot-2021-09-21-at-5.21.37-PM.png",
    price: '€11.99',
    description: 'spaghetti, chicken, parsley, garlic, black pepper, onion, bellpepper.',
    time: "22 min",
    inCart: 0,
  },
  {
    productvalue: "7",
    name: "Bacon Mac & Cheese",
    tag: "https://www.dinneratthezoo.com/wp-content/uploads/2019/07/bacon-mac-and-cheese-4.jpg",
    price: '€12.95',
    description: 'butter, milk, macaroni, bacon, salt.',
    time: "26 min",
    inCart: 0,
  },
  {
    productvalue: "8",
    name: "Pasta Calamarata",
    tag: "https://antichefattorietemplari.it/wp-content/uploads/2019/01/calamarata-napoletanta-con-calamarata-di-gragnano.jpg",
    price: '€12.99',
    description: 'pasta calamarata, calamari, cherry tomatoes, white wine, parsley, garlic, chili, salt.',
    time: "14 min",
    inCart: 0,
  },
  {
    productvalue: "9",
    name: "Lo Mein Noodles",
    tag: "https://www.chewoutloud.com/wp-content/uploads/2021/05/lo-mein-square.jpg",
    price: '€13.95',
    description: 'carrot, egg noodles, chicken, capsicum, garlic, green onion.',
    time: "11 min",
    inCart: 0,
  },
  {
    productvalue: "10",
    name: "Rasta Pasta",
    tag: "https://food.theffeed.com/wp-content/uploads/sites/7/2021/03/ae62e664375b2b9397cf0c8dbc272b82-e1616700645354-768x768.jpg",
    price: '€13.99',
    description: 'Chicken, Bell peppers, Pasta, Green onions, Jerk seasoning, Heavy cream, parmesan cheese, Garlic.',
    time: "14 min",
    inCart: 0,
  },
  {
    productvalue: "11",
    name: "Pasta alla Pescatora",
    tag: "http://www.italianfoodforever.com/wp-content/uploads/2011/12/pescatore1.jpg",
    price: '€14.95',
    description: 'Olive Oil, Onion, butter, linguine, pepper, salt, sugar, lemon, fresh basil, fresh parsley, tomatoes.',
    time: "29 min",
    inCart: 0,
  },
  {
    productvalue: "12",
    name: "Spaghetti Vongole",
    tag: "https://img.static-rmg.be/a/food/image/q75/w640/h400/1722/spaghetti-vongole.jpg",
    price: '€14.99',
    description: 'With fresh cockles from the Wadden Sea.',
    time: "15 min",
    inCart: 0,
  },
];


const PastaScreen = () => {
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
      {productsPasta.map((foodList, index) => (
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




export default PastaScreen;