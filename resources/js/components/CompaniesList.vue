<template>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ 'locales.sidebar.company.title' | trans}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ 'locales.table.company.logo' | trans}}</th>
                            <th>{{ 'locales.table.company.name' | trans}}</th>
                            <th>{{ 'locales.table.company.email' | trans}}</th>
                            <th>{{ 'locales.table.company.website' | trans}}</th>
                            <th>{{ 'locales.table.view' | trans}}</th>
                            <th>{{ 'locales.table.edit' | trans}}</th>
                            <th>{{ 'locales.table.delete' | trans}}</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ 'locales.table.company.logo' | trans}}</th>
                            <th>{{ 'locales.table.company.name' | trans}}</th>
                            <th>{{ 'locales.table.company.email' | trans}}</th>
                            <th>{{ 'locales.table.company.website' | trans}}</th>
                            <th>{{ 'locales.table.view' | trans}}</th>
                            <th>{{ 'locales.table.edit' | trans}}</th>
                            <th>{{ 'locales.table.delete' | trans}}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr v-if="isLoading">
                            <td v-for="i in 7">{{ 'locales.table.loading' | trans}}</td>
                        </tr>
                        <tr v-for="company in companies">
                            <td class="align-middle">
                                <img
                                    v-if='company.logo'
                                    :src='"/storage/"+company.logo' 
                                    alt="LOGO" 
                                    height="50"
                                >
                            </td>
                            <td class="align-middle">{{company.name}}</td>
                            <td class="align-middle">{{company.email}}</td>
                            <td class="align-middle">{{company.website}}</td>
                            <td class="align-middle text-center">
                                <a
                                    :href='"/companies/" + company.id'
                                    class="btn btn-success btn-circle btn-sm"
                                >
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <a
                                    :href='"/companies/" + company.id + "/edit"'
                                    class="btn btn-primary btn-circle btn-sm"
                                >
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                            <td class="align-middle text-center">
                                <button
                                    @click="deleteItem('/companies/' + company.id, 'company')"
                                    class="btn btn-danger btn-circle btn-sm"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center">
                    <button class="btn btn-default" @click="getListingData(pagination.prev_page_url, 'company')"
                            :disabled="!pagination.prev_page_url">
                        {{ 'locales.table.pagination.prev' | trans}}
                    </button>
                    <span>
                        {{ 'locales.table.pagination.page' | trans}} 
                        {{pagination.current_page + '/' + pagination.last_page}}
                    </span>
                    <button class="btn btn-default" @click="getListingData(pagination.next_page_url, 'company')"
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
        name: 'CompaniesList',
        mixins: [listing],
        data () {
            return {
                companies: [],
            }
        },
        mounted() {
            this.getListingData('/companies', 'company')
        }
    }
</script>
