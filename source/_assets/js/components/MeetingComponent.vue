<template>
    <div id="meeting" class="rounded-lg bg-white shadow-xl text-center overflow-hidden mb-12">
        <h2 class="bg-blue-600 font-bold uppercase text-white text-xl px-8 py-6">
            Next Meeting
        </h2>

        <div class="flex justify-center items-center font-mono px-8 py-12">
            <span class="text-3xl mx-2">
                {{ month }}
            </span>

            <span class="text-6xl mx-2">
                {{ day }}
            </span>

            <span class="text-3xl mx-2">
                {{ year }}
            </span>
        </div>
    </div>
</template>

<script>
    import Meeting from '../Meeting';

    export default {
        data: function () {
            return {}
        },
        computed: {
            nextMeeting() {
                let meeting = new Meeting();

                return meeting.next();
            },
            month() {
                return this.nextMeeting.format('MMMM')
            },
            day() {
                return this.nextMeeting.format('Do')
            },
            year() {
                return this.nextMeeting.format('YYYY')
            },
        }
    }
</script>

