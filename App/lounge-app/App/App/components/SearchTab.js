import React, { useState } from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { SearchBar } from '@rneui/themed'
import colors from '../../Config/colors';

const SearchTab = () => {
    const [search, setSearch] = useState("");
    console.log(search);
    return (
        <View>
            <SearchBar placeholder='Type Here...'
                round='true'
                lightTheme='true'
                showCancel='true'
                value={search} onChangeText={(search) => setSearch(search)}
                containerStyle={styles.searchBar}
                underlineColorAndroid="transparent" />
        </View>
    )
}


const styles = StyleSheet.create({
    searchBar: {
        backgroundColor: "transparent",
        borderRadius: 10,
        borderBottomWidth: 0,
        borderTopWidth: 0,
        height: 18,

    },
})

export default SearchTab;
