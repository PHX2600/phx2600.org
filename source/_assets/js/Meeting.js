import moment from "moment";

export default class Meeting {
    constructor() {
        this.today = moment();
    }

    next() {
        let thisFristFriday = this.firstFridayOfThisMonth();

        if (this.today.isAfter(thisFristFriday)) {
            return this.firstFridayOfNextMonth();
        }

        return thisFristFriday;
    }

    firstFridayOfThisMonth() {
        let date = this.today.clone().startOf("month");

        while (date.day() !== 5) {
            date.add(1, "day");
        }

        return date;
    }

    firstFridayOfNextMonth() {
        let date = this.today
            .clone()
            .add(1, "month")
            .startOf("month");

        while (date.day() !== 5) {
            date.add(1, "day");
        }

        return date;
    }
}
