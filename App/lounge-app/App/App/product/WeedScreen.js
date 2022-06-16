import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

const WeedScreen = () => {
  return (
    <View style={styles.container}>
      <Text>WeedScreen</Text>
    </View>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    alignContent: 'center',
    alignSelf: 'baseline',
    backgroundColor: 'pink'
  },
})


export default WeedScreen;