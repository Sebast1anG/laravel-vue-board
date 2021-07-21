<template>
  <div id="right">
    <h1>Tablica zadań</h1>
    <div class="horizontal">
      <img src="../images/horizontal.png" />
    </div>

    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </p>

    <div class="users-icon"><img src="../images/users.png" /></div>

    <div class="tasks">
      <div class="add-tasks">
        <h2>Dzisiejsze taski</h2>
        <div class="add-action"><img src="../images/add.png" /></div>
      </div>

      <ul class="tasks-list">
        <li v-for="task in todaytasks" v-bind:key="task.id">
          <div class="info">
            <div class="left">
              <label class="myCheckbox">
                <input
                  type="checkbox"
                  name="test"
                  :checked="task.completed"
                  @change="updateTodayTask(task.taskId)"
                />
                <span></span>
              </label>

              <h4>{{ task.title }}</h4>
            </div>
            <div class="right">
              <img src="../images/edit.png" />
              <img src="../images/del.png" @click="deleteTask(task.taskId)" />

              <button
                v-bind:class="{
                  inprogress: !task.approved,
                  approved: task.approved,
                }"
              >
                {{ task.approved ? "Approved" : "In progress" }}
              </button>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return { 
    todayTask: [],
    upcoming: [],
    newTask: "",
    };
  },
  created() { 
    this.fetchTodayTasks();
    this.fetchUpcoming();
  },

  methods: { 
  //upcoming tasks

  fetchUpcoming(){
  fetch("/api/upcoming")
  .then((res) => res.json())
  .then(({data}) => {
  this.upcoming = data;
  })
  .catch((err) => console.log(err));
  },

  //todayTaskMethod
    fetchTodayTasks(){
    fetch("api/dailytask", {
    method: "POST",
        headers: {
            'content-type': "application/json"
        },
        body: JSON.stringify(task),
    })
        .then(() => this.todayTask.unshift(task))
        catch((err) => console.log(err));
    },

    addDailyTask(taskId){
    const task = this.upcoming.filter (({ taskID: id}) => id)
    }
  },
  },
};
</script>

<style>
</style>
