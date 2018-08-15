<template>
<div class="row countdown-items">
	<div class="col text-center">
		<h2>{{ months }}</h2>
		<h6>{{ months == 1 ? 'mês' : 'meses' }}</h6>
	</div>
	<div class="col text-center">
		<h2>{{ days }}</h2>
		<h6>{{ days == 1 ? 'dia' : 'dias' }}</h6>
	</div>
	<div class="col text-center">
		<h2>{{ hours }}</h2>
		<h6>{{ hours == 1 ? 'hora' : 'horas' }}</h6>
	</div>
	<div class="col text-center">
		<h2>{{ minutes }}</h2>
		<h6>{{ minutes == 1 ? 'minuto' : 'minutos' }}</h6>
	</div>
	<div class="col text-center">
		<h2>{{ seconds }}</h2>
		<h6>{{ seconds == 1 ? 'segundo' : 'segundos' }}</h6>
	</div>
</div>
</template>

<script>
export default {
  data() {
    return {
      actualTime: moment().format("X"),
      weedding: moment("2018-10-27 17:00:00").format("X"),
      months: 0,
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0
    };
  },

  created() {
    this.compute();
    this.addOneSecondToActualTimeEverySecond();
  },

  methods: {
    addOneSecondToActualTimeEverySecond() {
      var component = this;
      (component.actualTime = moment().format("X")),
        setTimeout(function() {
          component.addOneSecondToActualTimeEverySecond();
        }, 1000);
    },

    compute() {
      var duration = moment.duration(this.getDiffInSeconds(), "seconds");
      this.months = duration.months() > 0 ? duration.months() : 0;
      this.days = duration.days() > 0 ? duration.days() : 0;
      this.hours = duration.hours() > 0 ? duration.hours() : 0;
      this.minutes = duration.minutes() > 0 ? duration.minutes() : 0;
      this.seconds = duration.seconds() > 0 ? duration.seconds() : 0;
    },

    getDiffInSeconds() {
      return this.weedding - this.actualTime;
    }
  },

  watch: {
    actualTime(val, oldVal) {
      this.compute();
    }
  }
};
</script>
