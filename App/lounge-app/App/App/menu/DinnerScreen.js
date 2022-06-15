import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import colors from '../../Config/colors';

const DinnerScreen = () => {
  return (
    <View style={styles.container}>
      <Text>DinnerScreen</Text>
    </View>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    alignSelf: 'center',
    alignContent: 'center',
    backgroundColor: colors.Blue,
  },
})


export default DinnerScreen;