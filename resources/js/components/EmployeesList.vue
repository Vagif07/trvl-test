<template>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ 'locales.sidebar.employee.title' | trans}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ 'locales.table.employee.first_name' | trans}}</th>
                            <th>{{ 'locales.table.employee.last_name' | trans}}</th>
                            <th>{{ 'locales.table.employee.company' | trans}}</th>
                            <th>{{ 'locales.table.employee.email' | trans}}</th>
                            <th>{{ 'locales.table.employee.phone' | trans}}</th>
                            <th>{{ 'locales.table.view' | trans}}</th>
                            <th>{{ 'locales.table.edit' | trans}}</th>
                            <th>{{ 'locales.table.delete' | trans}}</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ 'locales.table.employee.first_name' | trans}}</th>
                            <th>{{ 'locales.table.employee.last_name' | trans}}</th>
                            <th>{{ 'locales.table.employee.company' | trans}}</th>
                            <th>{{ 'locales.table.employee.email' | trans}}</th>
                            <th>{{ 'locales.table.employee.phone' | trans}}</th>
                            <th>{{ 'locales.table.view' | trans}}</th>
                            <th>{{ 'locales.table.edit' | trans}}</th>
                            <th>{{ 'locales.table.delete' | trans}}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr v-if="isLoading">
                            <td v-for="i in 8">{{ 'locales.table.loading' | trans}}</td>
                        </tr>
                        <tr v-for="employee in employees">
                            <td>{{employee.first_name}}</td>
                            <td>{{employee.last_name}}</td>
                            <td>
                                <a :href='"companies/" + employee.company.id'>
                                    {{employee.company.name}}
                                </a>
                            </td>
                            <td>{{employee.email}}</td>
                            <td>{{employee.phone}}</td>
                            <td class="align-middle text-center">
                                <a
                                    :href='"/employees/" + employee.id'
                                    class="btn btn-success btn-circle btn-sm"
                                >
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <a
                                    :href='"/employees/" + employee.id + "/edit"'
                                    class="btn btn-primary btn-circle btn-sm"
                                >
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <button
                                    @click="deleteItem('/employees/' + employee.id, 'employee')"
                                    class="btn btn-danger btn-circle btn-sm"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center">
                    <button class="btn btn-default" @click="getListingData(pagination.prev_page_url, 'employee')"
                            :disabled="!pagination.prev_page_url">
                        {{ 'locales.table.pagination.prev' | trans}}
                    </button>
                    <span>
                        {{ 'locales.table.pagination.page' | trans}} 
                        {{pagination.current_page + '/' + pagination.last_page}}
                    </span>
                    <button class="btn btn-default" @click="getListingData(pagination.next_page_url, 'employee')"
                            :disabled="!pagination.next_page_url">
                        {{ 'locales.table.pagination.next' | trans}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { listing } from '../mixins/listing'
    export default {
        name: 'EmployeesList',
        props: [
            'company_id',
        ],
        mixins: [listing],
        data () {
            return {
                employees: [],
            }
        },
        methods: {
            getCompanyEmployees() {
                axios.get('/company_employees/' + this.company_id).then((response) => {
                    this.employees = response.data.data
                    this.setPagination(response.data)
                    this.isLoading = false
                })
            },
        },
        mounted() {
            if (this.company_id)
                this.getCompanyEmployees()
            else
                this.getListingData('/employees', 'employee')
        }
    }
</script>
