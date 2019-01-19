import Vue from 'vue';
import axios from 'axios';


window.axios = axios;

class Form {
    /**
     * Create a new Form instance.
     *
     * @param {object} data
     */
    constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

    }

    data() {
        let data = {};

        for (let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
  }

}

export default Form;

new Vue({
    el: '#app',

    data: {
        form: new Form({
            type: '',
            select: '',
            cost: '',
            startDate: '',
            endDate: '',
            results: []
        })
    },

    methods: {
        onSubmit() {
            axios
                .get('http://localhost:8000/expenses/show')
                .then(response => {this.results = response.data.results});
        }
    }
});
