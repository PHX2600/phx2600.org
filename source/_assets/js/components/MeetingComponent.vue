<template>
    <div id="meeting" class="rounded-lg bg-white shadow-xl text-center overflow-hidden mb-8">
        <h2 class="bg-blue-600 font-bold uppercase text-white px-8 py-6 sm:text-xl">
            Next Meeting
        </h2>

        <div class="flex justify-center items-center font-mono px-6 py-10 sm:px-8 sm:py-12">
            <span class="text-2xl mx-2 sm:text-3xl">
                {{ month }}
            </span>

            <span class="text-5xl mx-2 sm:text-6xl">
                {{ day }}
            </span>

            <span class="text-2xl mx-2 sm:text-3xl">
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

