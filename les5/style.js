post(url = '/', queryString) { 
    return this.request(`${url}?${queryString}`, 'POST')