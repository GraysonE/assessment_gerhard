<template>
  <div class="select_wrap">
    <p v-if="loading">loading...</p>

    <div>
      <select v-model="themeHelper.theme">
        <option v-for="(href, name) of themes" v-bind:value="name" :key="name">
          {{ name }}
        </option>
      </select>
    </div>
  </div>
</template>
<script>
import ThemeHelper from '../assets/js/ThemeHelper.es6.js';

export default {
  data() {
    return {
      themes: {
        flatly: "https://bootswatch.com/4/flatly/bootstrap.min.css",
        materia: "https://bootswatch.com/4/materia/bootstrap.min.css",
        solar: "https://bootswatch.com/4/solar/bootstrap.min.css"
      },
      themeHelper: new ThemeHelper(),
      loading: true,
    }
  },
  created() {
    // add/load themes
    let added = Object.keys(this.themes).map(name => {
      return this.themeHelper.add(name, this.themes[name]);
    });

    Promise.all(added).then(sheets => {
      console.log(`${sheets.length} themes loaded`);
      this.loading = false;
      this.themeHelper.theme = (window.localStorage.getItem('theme')) ? window.localStorage.getItem('theme') : "flatly";
    });
  }
}
</script>

<style>
  .select_wrap {
    margin: 15px;
  }

  select {
    width: 150px;
  }
</style>