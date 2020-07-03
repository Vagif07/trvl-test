export const listing = {
	data () {
        return {
            isLoading: true,
            pagination: {},
        }
    },
	methods: {
		getListingData(url, type) {
	        axios.get(url).then((response) => {

	        	if (type == 'company')
	            	this.companies = response.data.data
	            else
	            	this.employees = response.data.data

	            this.setPagination(response.data)
	            this.isLoading = false
	        })
	    },
	    setPagination: function(data){
	        this.pagination = {
	            current_page: data.current_page,
	            last_page: data.last_page,
	            next_page_url: data.next_page_url,
	            prev_page_url: data.prev_page_url
	        }
	    },
	    deleteItem(url, type) {
	    	axios.delete(url).then((response) => {
	    		if (type == 'company')
	            	this.companies = response.data.data
	            else
	            	this.employees = response.data.data

	            this.setPagination(response.data)
	        })
	    }
	}
}