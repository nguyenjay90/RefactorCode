public class DIContainer {
    public resovleController() {
        // find out the http request info
        if (ApiController) {
            return new ApiController(new MysqlConnection());
        } elseif (TestController) {
            return new TestController(new MogoDB());
        }
    }
}