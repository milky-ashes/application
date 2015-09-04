<extends:keeper content-class="wide-content"/>

<block:content>

    <div class="head-part">
        <div class="row">
            <div class="col-lg-12">
                <h1>[[Discount Code]]</h1>
                <div class="link-block">
                    <button class="brand-btn btn">[[Add new]]</button>
                </div>
            </div>
        </div>
    </div>
    <div class="sort-part">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-part">
                    <div class="filter-block js-sort-block">
                        <a href="#" class="js-sort-link">Sort by <span>Code</span></a>
                        <div class="sort-list">
                            <span>People</span>
                            <span>Date</span>
                            <span>Stars</span>
                        </div>
                    </div>
                    <div class="filter-block js-sort-block">
                        <a href="#" class="js-sort-link">Filter by <span></span></a>
                        <div class="sort-list">
                            <span>People</span>
                            <span>Date</span>
                            <span>Stars</span>
                        </div>
                    </div>
                </div>
                <div class="search-part">
                    <a href="#" class="search-link"><i class="icon icon-search"></i></a>
                    <spiral:form class="search-form">
                        <form:input type="text" wrapper-class="search" placeholder="Search..."/>
                    </spiral:form>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block">
        <table class="table">
            <thead>
                <tr>
                    <th>[[ID]]</th>
                    <th>[[Date created]]</th>
                    <th><a rhef="#" class="filter-link up">[[expiration date]]</a></th>
                    <th>[[status]]</th>
                    <th>[[discount]]</th>
                    <th>[[code]]</th>
                    <th>[[usages]]</th>
                    <th>[[action]]</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
                <tr class="yellow-line">
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
                <tr class="green-line">
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
                <tr class="red-line">
                    <td>24</td>
                    <td>May 08,2014 14:58</td>
                    <td>May 09,2014 14:58</td>
                    <td>Expired</td>
                    <td>10%</td>
                    <td>ASTD2014DC</td>
                    <td>2/&infin;</td>
                    <td><form:checkbox label="Edit"/></td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="pagination-line">
                    <td colspan="2">Jump to page:</td>
                    <td colspan="4">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#" class="active">3</a>
                        <a href="#">...</a>
                        <a href="#">26</a>
                        <a href="#">27</a>
                        <a href="#">28</a>
                    </td>
                    <td colspan="2">
                        <a href="#">[[Previous]]</a>
                        <a href="#">[[Next]]</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>





</block:content>