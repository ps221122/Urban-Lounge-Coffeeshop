// ItemService.js

import { db } from '../Config/db';

export const addItem = (item) => {
    db.ref('/').push({
        order: item

    });
}