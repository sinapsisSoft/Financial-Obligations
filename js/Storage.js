class StoragePage {

    constructor() {


      this.sessionStorageKeyName = 'data';
    }
    setData(jSon) {

        this.jSon = jSon;
   
      }
    getStorageLogin() {
        return sessionStorage.getItem(this.sessionStorageKeyName);
    }
    removeStorageUser() {
        sessionStorage.removeItem(this.sessionStorageKeyName);
    }

    getStorage() {
        var obj = [],dataInsessionStorage = sessionStorage.getItem(this.sessionStorageKeyName);

    if (dataInsessionStorage !== null) {
        obj = this.setStorage(dataInsessionStorage) 
    }

    obj.push(this.jSon);

    sessionStorage.setItem(this.sessionStorageKeyName, JSON.stringify(this.jSon));

    //loadFromsessionStorage();

    }
  
    setStorage(dataStorage) {
        return JSON.parse(dataStorage);
    }
  
    loginStorage(jSon) {
        sessionStorage.setItem(this.sessionStorageKeyName, JSON.stringify(jSon));
    }
  
    clearStorage() {
    
    }
  }
  