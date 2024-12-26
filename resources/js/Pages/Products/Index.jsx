import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <>
            <h1 style={{
    textAlign: 'center',
    marginBottom: '20px',
    fontWeight: 'bold',
    fontSize: '48px',
    color: '#000000', 
    textShadow: '2px 2px 4px rgba(0, 0, 0, 0.2)',

}}>
    Jujutsu Doll Shop
</h1>

            <div style={{
                justifyContent: 'center',
                display: 'grid',
                gridTemplateColumns: 'repeat(4, 1fr)',
                gap: '30px',
                padding: '20px',
                maxWidth: '1200px',
                margin: '0 auto',


            }}>
                {products.map((product) => (
                    <div key={product.id} style={{
                        border: '1px solid #ddd',
                        borderRadius: '8px',
                        padding: '10px',
                        textAlign: 'center',
                        width: '200px',
                        boxShadow: '0 4px 20px rgba(0, 0, 0, 0.1)',
                        width: '100%',
                        backgroundColor: '#fff',
                        border: '1px solid #ddd',



                    }}>
                        {/* แสดงรูปภาพของสินค้า */}
                        {product.image && (
                            <img src={product.image} alt={product.name} style={{ width: '100%', borderRadius: '8px', marginBottom: '10px' }} />
                        )}
                        <h3 style={{ fontSize: '16px', margin: '10px 0' }}>{product.name}</h3>
                        <p style={{ color: '#888', margin: '5px 0' }}>฿ {product.price}</p>
                        <Link
                            href={`/products/${product.id}`}
                            style={{
                                display: 'inline-block',
                                backgroundColor: '#ff4d4f',
                                color: '#fff',
                                padding: '10px 15px',
                                borderRadius: '5px',
                                textDecoration: 'none',
                                marginTop: '10px',
                                boxShadow: '0 4px 6px rgba(255, 0, 0, 0.1)'
                            }}
                        >
                           View details
                        </Link>
                    </div>
                ))}
            </div>
        </>
    );
}
