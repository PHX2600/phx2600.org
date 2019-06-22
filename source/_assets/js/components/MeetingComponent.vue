<template>
    <div id="meeting">
        {{ nextMeeting }}
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

                return meeting.next().format('MMMM Do, YYYY');
            }
        }
    }
</script>

