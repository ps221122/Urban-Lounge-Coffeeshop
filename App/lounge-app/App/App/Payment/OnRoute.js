import React, { useRef} from "react";
import { StyleSheet, Text, View } from 'react-native';
import LottieView from 'lottie-react-native';





const OnRoute = () => {
  const animation = useRef(null);
  setTimeout(() => {
    animation.current?.play();
  }, 1000);
  return (
    <View style={styles.container}>
      <Text style={{ fontSize: 18, marginBottom: 5, }}>Your order is completed, we hope you enjoy.</Text>
      <LottieView
        style={{ height: 300, }}
        source={require("../assets/animation/delivered.json")}
        autoPlay={true}
        loop={true}
        ref={animation}
        speed={0.5} />
      <Text style={{
        fontSize: 20,
        marginTop: 10,
        fontWeight: "500"
      }}>We hope to see you soon!</Text>
    </View>
  )
}

export default OnRoute

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",
    // alignContent: "space-between",
  },
})
