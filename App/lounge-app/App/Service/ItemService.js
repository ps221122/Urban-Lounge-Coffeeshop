// ItemService.js

import { db } from '../Config/db';

export const addItem = (item) => {
    db.ref('/items').push({
        items: item
        
    });
}