import React from 'react';
import { Text, View, StyleSheet } from 'react-native';
import SearchTab from "../components/SearchTab";
import ProductNavigation from '../navigation/ProductNavigation';

const ProductScreen = () => {
  return (
    <View style={styles.container}>
      <SearchTab />
      <ProductNavigation />
    </View>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
})


export default ProductScreen;