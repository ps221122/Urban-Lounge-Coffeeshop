import React, { useState } from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, ImageBackground } from 'react-native';
import colors from './config/colors';
import RootNavigation from './root/RootNavigation';


const backgroundImage = { uri: "https://i.picsum.photos/id/137/4752/3168.jpg?hmac=dGsgAtPkFewFByZXZOmSg0U7Mohr43GyVu3n1AHVIyg" };

const App = () => {
  const [isSplashOn, onChangeIsSplashOn] = useState(true);
  setTimeout(() => {
    onChangeIsSplashOn(false);
  }, 5000);

  return (
    
    <ImageBackground resizeMode='cover'
      style={styles.background}
      source={backgroundImage}>
      {isSplashOn
        ? (

          <Text style={styles.text}>Urban Lounge</Text>
        )
        : (<RootNavigation />)
      }
    </ImageBackground>
  );
}

const styles = StyleSheet.create({
  background: {
    flex: 1,
    justifyContent: "center",
  },
  text: {
    color: "white",
    fontSize: 42,
    lineHeight: 80,
    fontWeight: "bold",
    textAlign: "center",
    backgroundColor: "#000000c0",
  },
  // container: {
  //   flex: 1,
  //   paddingTop: Platform.OS === 'android' ? statusbar.currentHight : 0,
  //   backgroundColor: colors.primary,
  // },
});


export default App;