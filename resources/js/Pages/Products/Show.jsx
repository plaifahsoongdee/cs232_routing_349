import { Link } from '@inertiajs/react';
export default function Show({ product }) {
    return (
        <div style={{
            display: 'flex',
            flexDirection: 'row',
            alignItems: 'center',
            justifyContent: 'center',
            padding: '40px',
            maxWidth: '1000px',
            margin: '0 auto',
            gap: '30px'
        }}>
            {/* รูปสินค้า */}
            <img
                src={product.image}
                alt={product.name}
                style={{
                    width: '60%',
                    height: 'auto',
                    borderRadius: '12px',
                    boxShadow: '0 8px 12px rgba(255, 255, 255, 0.2)'
                }}
            />

            {/* ข้อมูลสินค้า */}
            <div style={{
                flex: '1',
                textAlign: 'left'
            }}>
                <h1 style={{
                    fontSize: '36px',
                    fontWeight: 'bold',
                    marginBottom: '20px'
                }}>
                    {product.name}
                </h1>
                <p style={{
                    fontSize: '18px',
                    marginBottom: '15px'
                }}>
                    {product.description}
                </p>
                <p style={{
                    fontSize: '20px',
                    color: '#888',
                    fontWeight: 'bold',
                    marginBottom: '30px'
                }}>
                    ฿ {product.price}
                </p>
                <Link
                    href="/products"
                    style={{
                        display: 'inline-block',
                        backgroundColor: '#ff4d4f',
                        color: '#fff',
                        padding: '10px 15px',
                        fontSize: '18px',
                        borderRadius: '8px',
                        textDecoration: 'none',
                        boxShadow: '0 6px 10px rgba(255, 0, 0, 0.2)'
                    }}
                >
                    Back to All Products
                </Link>
            </div>
        </div>
    );
}



