## Laravel ERP System

To set up locally: 

- To clone, run: `git clone https://github.com/MattYeend/ERP.git`
- Navigate to folder
- Run `composer install`
- Run `php artisan key:generate`
- Create `.env` file and update relevant database and mail server credentials
- Run `php artisan migrate` and `php artisan db:seed`
- Run `npm install && npm run dev`
- Run `php artisan serve`

To clear cache
- `php artisan cache:clear` - to clear the application cache
- `php artisan route:clear` - to clear the route cache
- `php artisan config:clear` - to clear the config cache
- `php artisan view:clear` - to clear compiled views
- `php artisan event:clear` - to clear event cache

## General

User types:
- Super admins
- Admins
- General users

Departments:
- HR
    - Personnel Management
    - Recruitement
    - Payroll
    - Time and Attendance
    - Training and Development
    - Performance Management
- Finance and Accounting
    - General Ledger
    - Accounts Payable
    - Accounts Receivable
    - Asset Management
    - Budgeting
    - Finance Reporting
    - Tax Management
- Sales and Marketing
    - Sales Order Processing
    - Customer Relationship Management
    - Quotation Management
    - Sales Analytics
    - Marketing Campaign Management
- Supply Chain Management
    - Inventory Management
    - Purchase Order Management
    - Supplier Management
    - Warehouse Management
    - Order Fulfillment
    - Logistics and Distribution
    - Planning and Optimisation
    - Quality Controll
    - Demand Planning
- Production and Manufacturing
    - Production Planning
    - Bill of Materials
    - Shop Floor Control
    - Quality Management
    - Maintenance Management
    - Product Lifecycle Management
- Project Management
    - Project Planning and Scheduling
    - Resource Management
    - Project Costing
    - Time and Expense Tracking
    - Project Billing
    - Project Analytics
- Customer Service
    - Service Order Management
    - Service Contract Management
    - Field Service Management
    - Customer Support
    - Service Level Agreement Management
- Research and Development
    - Product Data Management
    - Research Project Management
    - Innovation Management
    - Compliance and Regulatory Management
- Procurement
    - Supplier Relationship Management
    - Purchase Requisitions
    - Purchase Orders
    - Supplier Performance Tracking
    - Contract Management
- IT 
    - System Administration
    - IT Asset Management
    - Network Management
    - Help Desk Support
    - Cybersecurity
- Compliance and Risk Management
    - Compliance Tracking
    - Risk Assessment and Management
    - Audit Management
    - Document Management

Examples of roles
- Purchasing Manager
- Engineering Manager
- System Administrator
- Data Analyst
- Supply Chain Manager
- HR Manager
- Production Manager
- Quality Control Manager
- Maintenance Manager
- Supply Chain Coordinator
- Shop Floor Supervisor
- Production Planner
- Logistics Coordinator
- Warehouse Manager